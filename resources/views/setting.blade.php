 @extends('admin.layout.layout')
 @section('content-section')
 <div class="content-wrapper">
 <div class="container-fluid ">
       <div class="col-lg-12 col-md-12">
        <form class="p-4  " enctype="multipart/form-data" method="post" action="{{ route('settings.submit') }}">
            @csrf
            <h1 class="text-center mb-4">Website Setting</h1>

            <div class="row">
            <!-- Company Name -->
            <div class="col-md-6 mb-3">
                <label for="name">Enter Company Name</label>
                <input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
            </div>

             <!-- Site Title -->
            <div class="col-md-6 mb-3">
                 <label for="title">Enter Company Title</label>
                <input type="text" name="site_title" class="form-control" placeholder="Site Title" required>
            </div>

            <!-- Company Email -->
            <div class="col-md-6 mb-3">
                 <label for="email">Enter Company Email</label>
                <input type="email" name="company_email" class="form-control" placeholder="Company Email" required>
            </div>

            <!-- Phone -->
            <div class="col-md-6 mb-3">
                 <label for="phone">Enter Company Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Company Phone" required>
            </div>


            <!-- Address -->
            <div class="col-md-12 mb-3">
                 <label for="address">Enter Company Address</label>
                <input type="text" name="address" class="form-control" placeholder="Company Address" required>
            </div>

         <!-- Company Logo -->
            <div class="col-md-6 mb-3">
                 <label for="logo">Select Company Logo</label>
                <input type="file" name="logo" class="form-control" accept="image/*" required>
            </div>



            <!-- Social Media Links -->
            <div class="col-md-6 mb-3">
                 <label for="fb-url">Facebook URL</label>
            <input type="url" name="facebook" class="form-control" placeholder="Facebook URL">
            </div>

            <div class="col-md-6 mb-3">
                 <label for="tw-url">Twitter URL</label>
            <input type="url" name="twitter" class="form-control" placeholder="Twitter URL">
            </div>

            <div class="col-md-6 mb-3">
                 <label for="insta-url">Instagram URL</label>
            <input type="url" name="instagram" class="form-control" placeholder="Instagram URL">
            </div>

            <div class="col-md-6 mb-3">
                 <label for="linkd-url">Linkdin URL</label>
            <input type="url" name="linkedin" class="form-control" placeholder="LinkedIn URL">
            </div>

            <div class="col-md-6 mb-3">
                 <label for="youtube-url">Youtube URL</label>

            <input type="url" name="Youtube" class="form-control" placeholder="Youtube URL">
            </div>
        </div>


             <!-- Site Description -->
            <div class="col-md-12 mb-3">
                 <label for="site-des">Description</label>
                <textarea name="site_description" class="form-control" rows="2" placeholder="Site Description" required></textarea>
            </div>

        <!-- Submit Button -->
      <div class="text-right">
        <button type="submit" class="btn btn-primary px-4 py-2 ">
          Save Settings
        </button>
          </div>
              </form>
         </div>
      </div>
     </div>
 </div>
 @endsection
