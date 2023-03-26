@extends('layouts.app')

@section('title', 'Add Product')


@section('content')
<div>
    <div class="wrapper">
        {{-- <div class="logo"> <img src="/img/logo_p.svg" alt="logo"> </div> --}}
        <div class="text-center my-4 name"> إنشاء منتج جديد </div>
        <form action="{{ route('submit_product')}}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="row g-3">
                <div class="col">
                    <input type="text" class="form-control" name="name" placeholder="اسم المنتج" aria-label="Name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="price" placeholder="السعر" aria-label="Last name">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" name="description" placeholder="الوصف"
                        aria-label="Last name">
                </div>
                <div class="col-12">
                    <label for="formFileLg" class="form-label">صورة المنتج</label>
                    <input class="form-control form-control-lg" name="image" id="formFileLg" type="file">
                </div>
                <div class="col-12">
                    <label for="inputCategory" class="form-label">التصنيف</label>
                    <select class="form-select" name="category_id" id="inputCategory" size="4" multiple
                        aria-label="multiple select example">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection