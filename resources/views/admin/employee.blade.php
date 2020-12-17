@extends('admin.baseA')
<title>Admin | Konsultan IT</title>
@section('content-admin')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="users-list-wrapper">
                <div class="users-list-filter px-1">
                    <form>
                        <div class="row border rounded py-2 mb-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-verified">Age</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-verified">
                                        <option value="">Any</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-role">Position</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-role">
                                        <option value="developer">Developer</option>
                                        <option value="Desain Grafis">Desain Grafis</option>
                                        <option value="Database">Database</option>
                                    </select>
                                </fieldset>
                            </div>
                            <!-- <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">Status</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-status">
                                        <option value="">Any</option>
                                        <option value="Active">Active</option>
                                        <option value="Close">Close</option>
                                        <option value="Banned">Banned</option>
                                    </select>
                                </fieldset>
                            </div> -->
                            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                <button type="reset" class="btn btn-danger btn-block glow users-list-clear mb-0">Clear</button>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                               <!--  <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Tambah</button> -->
                               <button type="button" class="btn btn-outline-primary block btn-block glow users-list-clear mb-0" data-toggle="modal" data-target="#default">
                                Add Employee
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="users-list-table">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <!-- datatable start -->
                            <div class="table-responsive">
                                <table id="users-list-datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>No Hp</th>
                                            <th>Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 0; ?>
                                    @foreach ($data_profil as $profil)
                                    <?php $no++; ?>
                                    <tbody>
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>
                                                <a href="">{{$profil->nama_lengkap}}</a>
                                            </td>
                                            <td>{{$profil->position}}</td>
                                            <td>{{$profil->jenis_kelamin}}</td>
                                            <td>{{$profil->age}}</td>
                                            <td>{{$profil->alamat}}</td>
                                            <td>{{$profil->no_hp}}</td>
                                            <td>{{$profil->salary}}</td>
                                                <!-- <td>
                                                    <span class="badge badge-light-success">Active</span>
                                                </td> -->
                                                <td>
                                                    <a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- users list ends -->
        </div>
    </div>
</div>
<!-- END: Content-->

<!-- Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Add User Employee</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-vertical" action="/add/employee" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label for="first-name-icon">Akses Login</label> -->
                                    <div class="position-relative has-icon-left">
                                        <select id="cars" name="role_login" class="form-control">
                                          <option value="master">Master Admin</option>
                                          <option value="petugas">Petugas</option>
                                      </select>
                                      <!-- <div class="form-control-position">
                                        <i class="bx bx-user"></i>
                                    </div>
  -->                               </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <!-- <label for="first-name-icon">Nama Lengkap</label> -->
                                <div class="position-relative has-icon-left">
                                    <input type="text" name="name" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Nama Lengkap">
                                    <!-- <div class="form-control-position">
                                        <i class="bx bx-user"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <!-- <label for="email-id-icon">Email</label> -->
                                <div class="position-relative has-icon-left">
                                    <input type="email" name="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Email">
                                    <!-- <div class="form-control-position">
                                        <i class="bx bx-mail-send"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                               <!--  <label for="password-icon">Password</label> -->
                                <div class="position-relative has-icon-left">
                                    <input type="password" name="password" id="password-icon" class="form-control" name="contact-icon" placeholder="Password">
                                    <!-- <div class="form-control-position">
                                        <i class="bx bx-lock"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <!-- <label for="first-name-icon">Position</label> -->
                                <div class="position-relative has-icon-left">
                                    <input type="text" name="position" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Position">
                                    <!-- <div class="form-control-position">
                                        <i class="bx bx-user"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <!-- <label for="contact-info-icon">No Hp</label> -->
                                <div class="position-relative has-icon-left">
                                    <input type="number" name="no_hp" id="contact-info-icon" class="form-control" name="contact-icon" placeholder="No Handphone">
                                    <!-- <div class="form-control-position">
                                        <i class="bx bx-mobile"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <!-- <label for="contact-info-icon">Salay</label> -->
                                <div class="position-relative has-icon-left">
                                    <input type="number" name="salary" id="contact-info-icon" class="form-control" name="contact-icon" placeholder="Salary">
                                    <!-- <div class="form-control-position">
                                        <i class="bx bx-salary"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-12">
                            <div class="form-group">
                                <div class="checkbox">
                                    <input type="checkbox" class="checkbox-input" id="checkbox4">
                                    <label for="checkbox4">Remember me</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1"><i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Submit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
                <!--/ Zero configuration table -->