@extends('vendor.layouts.master')

@section('content')

      <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">
    @include('vendor.layouts.sidebar')
      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <a href="{{route('vendor.products-variant-item.index', ['productId' => $variantItem->productVariant->product_id, 'variantId' => $variantItem->product_variant_id])}}" class="btn btn-warning mb-2"><i class="fas fa-angle-double-left"></i> Back</a>
            <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i>Create variant items</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                <form action="{{route('vendor.products-variant-item.update', $variantItem->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="form-group wsus__input">
                          <label>Variant Name</label>
                          <input type="text" class="form-control" name="variant_name" value="{{$variantItem->productVariant->name}}" readonly>
                      </div>
  
                      <div class="form-group wsus__input">
                          <label>Item Name</label>
                          <input type="text" class="form-control" name="name" value="{{$variantItem->name}}">
                      </div>
                      <div class="form-group wsus__input">
                          <label>Price <code>(set 0 to make it free)</code> </label>
                          <input type="text" class="form-control" name="price" value="{{$variantItem->price}}">
                      </div>
                      <div class="form-group wsus__input">
                          <label for="inputState">Is Default</label>
                          <select id="inputState" class="form-control" name="is_default">
                            <option value="">Select</option>
                            <option {{$variantItem->is_default == 1 ? 'selected' : ''}} value="1">Yes</option>
                            <option {{$variantItem->is_default == 0 ? 'selected' : ''}} value="0">No</option>
                          </select>
                      </div>
                      <div class="form-group wsus__input">
                          <label for="inputState">Status</label>
                          <select id="inputState" class="form-control" name="status">
                            <option {{$variantItem->status == 1 ? 'selected' : ''}} value="1">Active</option>
                            <option {{$variantItem->status == 0 ? 'selected' : ''}} value="0">Inactive</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->
    
@endsection