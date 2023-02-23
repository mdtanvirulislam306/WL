@extends('app')
@section('title','Role Permissions')
@section('content')
<div class="nk-content">
      <div class="container">
       <div class="nk-content-inner">
        <div class="nk-content-body">
         <div class="nk-block-head">
          <div class="nk-block-head-between flex-wrap gap g-2">
           <div class="nk-block-head-content">
            <h2 class="nk-block-title">Role & Permissions </h1>
             <nav>
              <ol class="breadcrumb breadcrumb-arrow mb-0">
               <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
               </li>
               <li class="breadcrumb-item">
                <a href="{{route('it-sevice')}}">Role & Permissions</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Roles List</li>
              </ol>
             </nav>
           </div>
           <div class="nk-block-head-content">
            <ul class="d-flex">
             <li>
              <a href="{{route('it-sevice.create')}}" class="btn btn-primary btn-md d-md-none">
               <em class="icon ni ni-plus"></em>
               <span>Add</span>
              </a>
             </li>
             <li>
              <a href="{{route('it-sevice.create')}}" class="btn btn-primary d-none d-md-inline-flex">
               <em class="icon ni ni-plus"></em>
               <span>Add Role</span>
              </a>
             </li>
            </ul>
           </div>
          </div>
         </div>
         <div class="nk-block">
          <div class="card">
           <table class="datatable-init table" data-nk-container="table-responsive">
            <thead class="table-light">
             <tr>
              <th class="tb-col">
               <span class="overline-title">Role</span>
              </th>
              <th class="tb-col tb-col-end" data-sortable="false">
               <span class="overline-title">action</span>
              </th>
             </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role)
                <tr>
              <td class="tb-col">
               {{$role->name}}
              </td>
              <td class="tb-col tb-col-end">
               <div class="dropdown">
                <a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown">
                 <em class="icon ni ni-more-v"></em>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                 <div class="dropdown-content py-1">
                  <ul class="link-list link-list-hover-bg-primary link-list-md">
                   <li>
                    <a href="edit-product.html">
                     <em class="icon ni ni-edit"></em>
                     <span>Edit</span>
                    </a>
                   </li>
                   <li>
                    <a href="edit-product.html">
                     <em class="icon ni ni-trash"></em>
                     <span>Delete</span>
                    </a>
                   </li>
                   <li>
                    <a href="products.html">
                     <em class="icon ni ni-eye"></em>
                     <span>View Details</span>
                    </a>
                   </li>
                  </ul>
                 </div>
                </div>
               </div>
              </td>
             </tr>
                @empty
                <tr>
              <td class="tb-col">
               
              </td>
             </tr>
                @endforelse
             
            </tbody>
           </table>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
@endsection