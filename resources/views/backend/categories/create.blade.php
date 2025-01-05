<x-layout.backend-master>
    <x-slot name="title">
        Categories
    </x-slot>
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Categories</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Analysis</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('categories.index') }}">
                        <button type="button" class="btn btn-outline-primary">Categories</button>
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
                                <h5 class="mb-0">Add Category</h5>
                            </div>
                        </div>
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <!-- Name Field -->
                            <div class="input mb-4">
                                <label for="name" class="mb-1">Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter page name"
                                    class="form-control" value="{{ old('name') }}">
                                @error('name')
                                    <span class="position-absolute text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>

                            <!-- Slug Field -->
                            <div class="input mb-4">
                                <label for="slug" class="mb-1">Slug</label>
                                <input type="text" id="slug" name="slug" placeholder="Enter slug"
                                    class="form-control" value="{{ old('slug') }}">
                                @error('slug')
                                    <span class="position-absolute text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>

                            <!-- Status Field -->
                            <div class="input mb-4">
                                <label for="status" class="mb-1">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="">Select status</option>
                                    <option value="{{ App\Enum\StatusType::ACTIVE }}">Active</option>
                                    <option value="{{ App\Enum\StatusType::INACTIVE }}">Inactive</option>
                                </select>
                                @error('status')
                                    <span class="position-absolute text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            $('#name').on('keyup', function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^\w\s]/g, '');
                Text = Text.replace(/[\s]/g, '-');
                $('#slug').val(Text);
            })
        </script>
    @endpush

</x-layout.backend-master>
