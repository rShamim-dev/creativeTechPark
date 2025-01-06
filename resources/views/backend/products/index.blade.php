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
                                                    <button type="button" class="btn btn-outline-primary px-4 view-product"
                                                        data-bs-toggle="modal" data-bs-target="#product-show"
                                                        data-title="{{ $data->name }}"
                                                        data-price="{{ $data->price }}"
                                                        data-status="{{ $data->status }}"
                                                        data-img="{{ $data->getFirstMediaUrl('images', 'thumb') }}">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>

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


    {{-- Modal --}}
    <div class="modal fade" id="product-show">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 py-2">
                    <h5 class="modal-title" id="product-title">Modal title</h5>
                    <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="modal">
                        <i class="material-icons-outlined">close</i>
                    </a>
                </div>
                <div class="modal-body">
                    <img id="product-img" src="" alt="Product Image" class="img-fluid mb-3" />
                    <p id="product-status"></p>
                    <p id="product-price">Price: </p>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.view-product').forEach(function(button) {
                    button.addEventListener('click', function() {
                        // Get product details from data attributes
                        const title = button.getAttribute('data-title');
                        const price = button.getAttribute('data-price');
                        const status = button.getAttribute('data-status');
                        const productImg = button.getAttribute('data-img');

                        // Update modal content
                        document.getElementById('product-title').textContent = title;
                        document.getElementById('product-status').textContent = status == 1 ?
                            'Published' : 'Unpublished';
                        document.getElementById('product-price').textContent = `Price: ${price}`;

                        // Update the image source
                        const imgElement = document.getElementById('product-img');
                        imgElement.src = productImg;

                        // Add an alt attribute fallback in case the image doesn't load
                        imgElement.alt = title || 'Product Image';
                    });
                });
            });
        </script>
    @endpush

</x-layout.backend-master>>
