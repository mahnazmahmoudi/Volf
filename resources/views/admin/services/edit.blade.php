<x-panel-layout>
    <x-slot name="title">
        - edit servic
    </x-slot>
    <br>
    <div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> edit service</h3>
                        </div>
                        <form action="{{route('services.update',$service->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label for="title">title</label>
                                        <input type="text" class="form-control" name="title"
                                               placeholder="عنوان مقاله را وارد نمایید" autocomplete="off"
                                               value="{{$service->title}}">
                                        @error('title')
                                        <p id="error">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="description">description</label>
                                        <textarea name="description" id="description" cols="30" rows="10"
                                                  class="form-control"
                                                  placeholder="توضیحات مقاله را وارد نمایید">{{$service->description}}</textarea>
                                        @error('description')
                                        <p id="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="image">عکس</label>
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                        <p id="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">edit</button>
                                <a href="{{route('services.index')}}" class="btn btn-dark float-left">بازگشت</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-panel-layout>
