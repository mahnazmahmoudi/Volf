<?php

namespace App\Http\Controllers;

use App\Http\Helpers\ImageHelper;
use App\Http\Requests\Service\ServiceStoreRequest;
use App\Http\Requests\Service\ServiceUpdateRequest;
use App\Http\Requests\Service\ServiveStoreRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.all', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $admin = auth()->guard('admins')->user();
        if (!$admin) {
            abort(403, 'Admin not authenticated');
        }

        $data = $request->validated();
        $data['admin_id'] = $admin->id;

        if ($request->hasFile('image')) {
            $imagePath = ImageHelper::uploadImages($request->file('image'));
            $data['image'] = $imagePath;
        }

        $service = $admin->services()->create($data);

        session()->flash('status', 'سرویس با موفقیت ثبت شد');
        return redirect()->route('services.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceUpdateRequest $request, Service $service)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = ImageHelper::uploadImages($request->file('image'));
            $data['image'] = $imagePath;
        }

        $service->update($data);

        session()->flash('status', 'سرویس با موفقیت بروزرسانی شد');
        return redirect()->route('services.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $admin = auth()->guard('admins')->user();
        if (!$admin) {
            abort(403, 'Admin not authenticated');
        }

        if ($service->admin_id !== $admin->id) {
            abort(403, 'You are not authorized to delete this service');
        }

        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        session()->flash('status', 'سرویس با موفقیت حذف شد');
        return redirect()->route('services.index');
    }
}
