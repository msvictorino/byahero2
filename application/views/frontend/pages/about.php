<style>
.about-us {
    padding: 30px 0;
    
}
.about-us .h1 {
    font-size: 50px;
    color: #848484
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


.content {
    padding-top: 30px;
}

/* Heading */
.heading {
    z-index: 1;
    position: relative;
    text-align: center;
    margin-bottom: 100px;
}

.heading:after {
    left: 50%;
    height: 3px;
    width: 50px;
    content: " ";
    bottom: -35px;
    margin-left: -25px;
    position: absolute;
    background: #444;
}

.heading h2 {
    font-size: 40px;
    font-weight: 500;
    margin: 0 0 20px;
    color: #444;
}

.heading p {
    font-size: 16px;
    font-weight: 300;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: #8693a7;
}

/* Team Members */
.team-members {
    width: 100%;
    cursor: pointer;
    overflow: hidden;
    position: relative;
    margin-bottom: 35px;
}

.team-members .team-avatar {
    position: relative;
}

.team-members .team-avatar:after {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: " ";
    position: absolute;
    background: rgba(129, 129, 129, 0.1);
    transition-duration: 300ms;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.7, 1, 0.7, 1);
}

.team-members .team-avatar img {
    display: block;
    margin: 0 auto;
    text-align: center;
}

.team-members .team-desc {
    left: auto;
    bottom: 0;
    width: 100%;
    padding: 0 20px;
    position: absolute;
    opacity: 0;
    color: #fff;
    -webkit-transform: translate3d(0, 10%, 0);
    transform: translate3d(0, 10%, 0);
    -webkit-transition: opacity 0.3s;
    -moz-transition: opacity 0.3s;
    -ms-transition: opacity 0.3s;
    -o-transition: opacity 0.3s;
    transition: opacity 0.3s;
}

.team-members .team-desc h4 {
    font-size: 22px;
    font-weight: 600;
    margin: 0 0 10px;
    color: #fff;
}

.team-members .team-desc span {
    display: block;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    color: #fff;
}

.team-members:hover .team-avatar:after {
    background: rgba(47, 60, 72, 0.5);
    transition-duration: 300ms;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.7, 1, 0.7, 1);
}

.team-members:hover .team-desc {
    -webkit-transform: translate3d(0, -5%, 0);
    transform: translate3d(0, -5%, 0);
    -webkit-transform: translate3d(0, -10%, 0);
    transform: translate3d(0, -10%, 0);
}

.team-members:hover .team-desc {
    opacity: 1;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

/* End About Us */
</style>

<div class="about-us">
            <div class="container">
             <h2>About Us</h2>
             <img class="center" src="<?= base_url().'img/logo.png'?>"">
             <h4> Who are we? </h4>
            <p> Who are we? What do we run? The world! Who run the world? GIRLS!
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
             galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
              the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with th
              release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
    </div>
</div>


<div class="container content">
    <div class="heading">
        <h2>Our <strong>Great Team</strong></h2>
        <p>To try the most advanced business</p>
    </div><!-- //end heading -->

	<div class="row">
        <div class="col-sm-4">
            <div class="team-members">
                <div class="team-avatar">
                    <img class="img-responsive" src="http://keenthemes.com/assets/bootsnipp/member1.png" alt="">
                </div>
                <div class="team-desc">
                    <h4>JColeen Santiano</h4>
                    <span>Marketing</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-members">
                <div class="team-avatar">
                    <img class="img-responsive" src="http://keenthemes.com/assets/bootsnipp/member2.png" alt="">
                </div>
                <div class="team-desc">
                    <h4>John Mark Derin Urgelles</h4>
                    <span>Founder</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-members">
                <div class="team-avatar">
                    <img class="img-responsive" src="http://keenthemes.com/assets/bootsnipp/member3.png" alt="">
                </div>
                <div class="team-desc">
                    <h4>Micaella Victorino</h4>
                    <span>Director</span>
                </div>
            </div>
        </div>
    </div><!-- //end row -->
</div>