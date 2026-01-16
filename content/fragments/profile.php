<div class="row profile-container">
    <!-- LEFT SIDE -->
    <div class="col-4 border">
        <div class="border-bottom p-3 text-center">
            PHOTO
        </div>

        <div class="row border-bottom py-2 align-items-center">
            <div class="col-5 text-muted">NAME</div>
            <div class="col-7 text-end">
                <span class="view-value">John Doe</span>
                <input type="text" class="form-control form-control-sm edit-field d-none" value="John Doe">
            </div>
        </div>

        <div class="border-bottom py-2">
            <div class="row">
                <div class="col-5 text-muted">ROLE</div>
                <div class="col-7 text-end">Admin</div>
            </div>
        </div>

        <div class="border-bottom py-2">
            <div class="row">
                <div class="col-5 text-muted">STATUS</div>
                <div class="col-7 text-end">VALUE</div>
            </div>
        </div>

        <div class="row border-bottom py-2 align-items-center">
            <div class="col-5 text-muted">CONTACT</div>
            <div class="col-7 text-end">
                <span class="view-value">+63 9XX XXX XXXX</span>
                <input type="tel" class="form-control form-control-sm edit-field d-none" value="+63 9XX XXX XXXX">
            </div>
        </div>

        <div class="row border-bottom py-2 align-items-center">
            <div class="col-5 text-muted">EMAIL</div>
            <div class="col-7 text-end">
                <span class="view-value">sample@mail.com</span>
                <input type="email" class="form-control form-control-sm edit-field d-none" placeholder="name@example.com">
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="col-8 border">
        <div class="row border-bottom py-2 align-items-center">
            <div class="col-4">DATE OF BIRTH</div>
            <div class="col-8">
                <span class="view-value">1999-01-01</span>
                <input type="date" class="form-control form-control-sm edit-field d-none" value="1999-01-01">
            </div>
        </div>

        <div class="row border-bottom py-2 align-items-center">
            <div class="col-4">AGE</div>

            <div class="col-8">
                <span class="view-value">25</span>
                <input type="number" class="form-control form-control-sm edit-field d-none" value="25" min="0" max="120">
            </div>
        </div>


        <div class="row border-bottom py-2 align-items-center">
            <div class="col-4">GENDER</div>
            <div class="col-8">
                <span class="view-value">Male</span>
                <select class="form-select form-select-sm edit-field d-none">
                    <option selected>Male</option>
                    <option>Female</option>
                </select>
            </div>
        </div>

        <div class="row border-bottom py-2 align-items-start">
            <div class="col-4">ADDRESS</div>

            <div class="col-8">
                <!-- VIEW -->
                <span class="view-value d-block">
                    123 Example Street, Barangay Sample, City, Province
                </span>

                <!-- EDIT -->
                <textarea
                    class="form-control form-control-sm edit-field d-none"
                    rows="2"
                >123 Example Street, Barangay Sample, City, Province</textarea>
            </div>
        </div>
    </div>
</div>
<div class="row profile-edit d-none">

    <div class="col-8 border">

        <div class="row border-bottom py-2 align-items-center">
            <div class="col-4">DATE OF BIRTH</div>
            <div class="col-8">
                <input type="date" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row border-bottom py-2 align-items-center">
            <div class="col-4">AGE</div>
            <div class="col-8">
                <input type="number" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row border-bottom py-2 align-items-center">
            <div class="col-4">GENDER</div>
            <div class="col-8">
                <select class="form-select form-select-sm">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
        </div>

        <div class="row border-bottom py-2 align-items-center">
            <div class="col-4">ADDRESS</div>
            <div class="col-8">
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>

    </div>

</div>
<div class="d-flex justify-content-end mt-4">
    <div class="prof-btn btn btn-success rounded-pill px-4 py-2">
        Edit Profile
    </div>
</div>
