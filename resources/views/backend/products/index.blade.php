<x-layout.backend-master>
    <x-slot name="title">
        Products
    </x-slot>
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Products</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Analysis</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('products.create') }}">
                        <button type="button" class="btn btn-outline-primary">Add Products</button>
                    </a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-12 col-xxl-8 d-flex align-items-stretch">
                <div class="card w-100 rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0">Products</h5>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->price }}</td>
                                            <td>
                                                <img width="200" height="100"
                                                    src="{{ $data->getFirstMediaUrl('images') }}" alt="">
                                            </td>
                                            <td>
                                                @if ($data->status == App\Enum\StatusType::ACTIVE)
                                                    <p
                                                        class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">
                                                        Published</p>
                                                @else
                                                    <p
                                                        class="dash-lable mb-0 bg-danger bg-opacity-10 text-danger rounded-2">
                                                        Unpublished</p>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <a href="{{ route('products.edit', $data->id) }}">
                                                        <button class="btn btn-outline-info">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('products.destroy', $data->id) }}"
                                                        id="delete_news_{{ $data->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" data-id="{{ $data->id }}"
                                                            class="btn delete-button btn-outline-danger">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.backend-master>>
