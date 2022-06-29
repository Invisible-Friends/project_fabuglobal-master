
@extends("admin_dashboard.layouts.app")

@section('title', 'Admin - Edit About Page')

@section("style")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js" integrity="sha512-XNYSOn0laKYg55QGFv1r3sIlQWCAyNKjCa+XXF5uliZH+8ohn327Ewr2bpEnssV9Zw3pB3pmVvPQNrnCTRZtCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection


    @section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
                <div class="breadcrumb-title pe-3">About</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="p-4 card-body">
                    <h5 class="card-title">Edit About Page</h5>
                    <hr/>

                    <form action="{{ route('admin.setting.update') }}" method='post' enctype='multipart/form-data'>
                        @csrf

                        <div class="mt-4 form-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-4 border rounded border-3">

                                    <div class="mb-3">
                                            <label for="about_text" class="form-label">About Our Mission</label>
                                            <textarea name='about_text' class="form-control" id="about_text" rows="3">{{ old("about_text", $allabout->about_text) }}</textarea>

                                            @error('about_text')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- images --}}
                                        <div class='col-md-4'>
                                            <div class='p-2 user-image'>
                                                <img class='img-fluid img-thumbnail' src="/{{ $allabout->about_fourth_image }}" >
                                            </div>
                                        </div>

                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class="mb-3">
                                                    <label for="about_first_image" class="form-label">First member Image</label>
                                                    <input name='about_first_image' type='file' class="form-control" id="about_first_image">

                                                    <div class="mb-3">
                                                        <label for="about_first" class="form-label"> First member info</label>
                                                        <textarea name='about_first'  id='about_first' class="form-control" rows="3">{{ old("about_first", $allabout->about_first) }}</textarea>

                                                        @error('about_first')
                                                            <p class='text-danger'>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class="mb-3">
                                                    <label for="about_second_image" class="form-label">Second member Image</label>
                                                    <input name='about_second_image' type='file' class="form-control" id="about_second_image">

                                                    <div class="mb-3">
                                                        <label for="about_second" class="form-label"> second member info</label>
                                                        <textarea name='about_second'  id='about_second' class="form-control" rows="3">{{ old("about_second", $allabout->about_second) }}</textarea>

                                                        @error('about_second')
                                                            <p class='text-danger'>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class="mb-3">
                                                    <label for="about_third_image" class="form-label">Third member Image</label>
                                                    <input name='about_third_image' type='file' class="form-control" id="about_third_image">

                                                    <div class="mb-3">
                                                        <label for="about_third" class="form-label"> Third member info</label>
                                                        <textarea name='about_third'  id='about_third' class="form-control" rows="3">{{ old("about_third", $allabout->about_third) }}</textarea>

                                                        @error('about_third')
                                                            <p class='text-danger'>{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class="mb-3">
                                                    <label for="about_fourth_image" class="form-label">Fouth member Image</label>
                                                    <input name='about_fourth_image' type='file' class="form-control" id="about_fourth_image">

                                                    <div class="mb-3">
                                                        <label for="about_fourth" class="form-label"> Fouth member info</label>
                                                        <textarea name='about_fourth'  id='about_fourth' class="form-control" rows="3">{{ old("about_fourth", $allabout->about_fourth) }}</textarea>

                                                        @error('about_fourth')
                                                            <p class='text-danger'>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>

                                       




                                        <button class='btn btn-primary bg-primary' type='submit'>Update</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
    <!--end page wrapper -->
    @endsection

@section("script")
<script>
    $(document).ready(function () {

        setTimeout(() => {
            $(".general-message").fadeOut();
        }, 5000);

        let initTinyMCE = (id) => {
            tinymce.init({
                selector: '#'+id,
                plugins: 'advlist autolink lists link charmap print preview hr anchor pagebreak',
                toolbar_mode: 'floating',
                height: '300',

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code | rtl ltr',
                toolbar_mode: 'floating',
            });
        }

        initTinyMCE('about_first');
        initTinyMCE('about_second');
        initTinyMCE('about_third');
        initTinyMCE('about_fourth');
        initTinyMCE('about_fifth');
        initTinyMCE('about_text');

    });

</script>
@endsection
