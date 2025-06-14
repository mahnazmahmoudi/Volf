<x-panel-layout>
    <x-slot name="title">
        - List of Services
    </x-slot>
    <div class="container-fluid">
        <div class="content-header">
            <div class="row mb-4
                <div class=" col-sm-6
            ">
            <h1 class="m-0 text-dark">List of Services</h1>
        </div>
{{--        <div class="col-sm-6">--}}
{{--            <ol class="breadcrumb float-sm-left btn-group float-left">--}}
{{--                @can('services-create')--}}
{{--                    <a href="{{ route('services.create') }}" class="btn btn-primary">Create Service</a>--}}
{{--                @endcan--}}
{{--            </ol>--}}
{{--        </div>--}}
    </div>
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    </div>
    <div class="container-fluid table-responsive" style="margin-top: -20px">
        <table class="table table-bordered table-dark text-center">
            <thead class="bg-primary">
            <tr>
                <th>Sr. No.</th>
                <th>Service Title</th>
                <th>Image</th>
{{--                @can('services-update')--}}
                    <th>Edit</th>
{{--                @endcan--}}
{{--                @can('services-delete')--}}
                    <th>Delete</th>
{{--                @endcan--}}
            </tr>
            </thead>
            @foreach($services as $key => $service)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $service->title }}</td>
                    <td>
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}"
                                 style="width: 30px; height: 30px">
                        @else
                            <span>-</span>
                        @endif
                    </td>
{{--                    @can('services-update')--}}
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}">
                                <i class="nav-icon fa fa-edit" style="color: white; padding-left: 15px"></i>
                            </a>
                        </td>
{{--                    @endcan--}}
{{--                    @can('services-delete')--}}
                        <td>
                            <a href="{{ route('services.destroy', $service->id) }}"
                               onclick="destroyArticle(event, {{ $service->id }})">
                                <i class="nav-icon fa fa-trash" style="color: white"></i>
                            </a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                  id="destroy-service-{{ $service->id }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
{{--                    @endcan--}}
                </tr>
            @endforeach
        </table>
    </div>
    <div style="margin-right: 480px">
        {{ $services->appends(['search' => request('search')])->render('pagination::bootstrap-4') }}
    </div>
    </div>
    <x-slot name="scripts">
        <script>
            function destroyArticle(event, id) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure you want to delete this service?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: 'rgb(40, 167, 69)',
                    cancelButtonColor: 'rgb(220, 53, 69)',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`destroy-service-${id}`).submit()
                    }
                })
            }
        </script>
    </x-slot>
</x-panel-layout>
