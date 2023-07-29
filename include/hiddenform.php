<div class="container-fluid overflow-hidden py-5 px-lg-0 " id="bttn" hidden="until-found">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img src="img/exportreg.jpg" width="700" height="840">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-12 box btn-primary">
                                   <center><h3> <label>Book Your Order</label></h3></center>
                                </div>
                                <div class="col-12 col-sm-6 box bg">
                                    <label>Enter Name</label>
                                </div>
                                 <div class="col-12 col-sm-6 box">
                                    <input type="text" name="username" id="username" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6 box bg">
                                    <label>Contact No</label>
                                </div>

                                <div class="col-12 col-sm-6 box">
                                    <input type="text" name="contact" id="contact" class="form-control bg-light border-0" placeholder="Your Number" style="height: 55px;">
                                </div>
                                
                                <div class="col-12 col-sm-6 box bg">
                                    <label>Event date</label>
                                </div>

                                <div class="col-12 col-sm-6 box">
                                    <input type="date" name="eventdate" id="eventdate" class="form-control bg-light border-0" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6 box bg">
                                    <label>Event Time</label>
                                </div>

                                <div class="col-12 col-sm-6 box">
                                    <input type="time" name="eventtime" id="eventtime" class="form-control bg-light border-0" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6 box bg">
                                    <label>Event Type</label>
                                </div>

                                <div class="col-12 col-sm-6 box">
                                    <select name="eventtype" id="eventtype" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Wedding/ Engagement Ceremonies</option>
                                        <option>Birthday/ Anniversary/ Baby Shower</option>
                                        <option>Live Show/ Professional lights and sounds</option>
                                        <option>Catering Services/ Camera Videography and Photography</option>
                                        <option>Family and Company Functions</option>
                                        <option>Entertainment Anchoring/ Acting/ Dancing</option>
                                        <option>School and College Events</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6 box bg">
                                    <label>Event Destination/Location</label>
                                </div>

                                 <div class="col-12 col-sm-6 box">
                                    <input type="text" name="location" id="location" class="form-control bg-light border-0" style="height: 55px;">
                                </div>

                                 <div class="col-12 col-sm-6 box bg">
                                    <label>Enter your budget </label>
                                </div>

                                 <div class="col-12 col-sm-6 box">
                                    <input type="text" name="budget" id="budget" class="form-control bg-light border-0"  style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6 box bg">
                                    <label>You can share decoration theme too</label>
                                </div>

                                 <div class="col-12 col-sm-6 box">
                                    <input type="file" name="usertheme" id="usertheme" class="form-control bg-light border-0" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6 box bg">
                                    <label>Description</label>
                                </div>

                                 <div class="col-12 col-sm-6 box">
                                    <textarea name="description" id="description" class="form-control bg-light border-0" placeholder="Share your ideas regarding event"></textarea>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                                 </div>
                        </form>
                </div>    
            </div>
        </div>
    </div>

  <?php
 $con = mysqli_connect('localhost', 'root', '','starlightevents');
$username = $_POST['username'];
$contact = $_POST['contact'];
$eventdate = $_POST['eventdate'];
$eventtime = $_POST['eventtime'];
$eventtype = $_POST['eventtype'];
$location = $_POST['location'];
$budget = $_POST['budget'];
$usertheme = $_POST['usertheme'];
$description = $_POST['description'];
$sql = "INSERT INTO bookorder(id,username,contact,eventdate,eventtime,eventtype,location,budget,usertheme,description) VALUES ('0', '$username', '$contact', '$eventdate','$eventtime','$eventtype','$location','$budget','$usertheme','$description')";
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "Records Inserted";
}
 ?>