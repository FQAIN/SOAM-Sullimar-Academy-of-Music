<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
             <br> <br> <br> <br>
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt="">
          </div>
            <div class="card-body" style="text-align: center">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong> 10</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
            <br> <br> <br> <br>
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fa fa-user pr-1"></i> General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Username</th>
                <td width="2%">:</td>
                <td><?php echo $student["username"] ?></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo $student["email"] ?></td>
              </tr>
              <tr>
                <th width="30%">Date of Birth</th>
                <td width="2%">:</td>
                <td><?php echo $student["dob"] ?></td>
              </tr>
              <tr>
                <th width="30%">Phone</th>
                <td width="2%">:</td>
                <td><?php echo $student["phone"] ?></td>
              </tr>
              <tr>
                <th width="30%">Date of Enrollment</th>
                <td width="2%">:</td>
                <td><?php echo $student["dateEnrollment"] ?></td>
              </tr>
              <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $student["address"] ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
