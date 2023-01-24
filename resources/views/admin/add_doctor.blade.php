<!DOCTYPE html>
<html lang="en">
  <head>
 	@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
  		@include('admin.sidebar')
      <!-- partial -->
   		@include('admin.navbar')
        <!-- partial -->
         <div class="main-panel">
          <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">
                x
              </button>
              {{session()->get('message')}}
            </div>
            @endif
            
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-container" action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="doctorName">Doctor Name</label>
                        <input type="text" name="doctorname" class="form-control" id="doctorName" placeholder="doctor name">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="phone number">
                      </div>
  
                      <div class="form-group">
                      <label for="Speciality">Speciality</label>
                      <select class="form-control" name="speciality" id="Speciality">
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="noise">Nose</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="roomNo">Room No</label>
                        <input type="text" name="roomno" class="form-control" id="roomNo" placeholder="room no">
                    </div>
                     <div class="form-group">
                        <label>Doctor Image</label>
                        <input type="file" name="file" class="">

                      </div>
   
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  	@include('admin.script')
  </body>
</html>
