@layout('template.default')
@section('body')
    <div id="slider3" class="nivoSlider">
        <img title="Picture 1" src="{{ URL::base()."/" }}img/demo/slide_1.jpg" alt="" />
        <img title="Picture 2" src="{{ URL::base()."/" }}img/demo/slide_2.jpg" alt="" />
        <img title="Picture 3" src="{{ URL::base()."/" }}img/demo/slide_3.jpg" alt="" />
    </div>


    <div class="one-half">
        <div class="heading_bg"><h2>Welcome</h2></div>
        <p>Welcome to the e-Manthan. e-Manthan is a web portal of the popular IISER Mohali students magazine 'Manthan'. After the third Manthan was published in Feb-2012, a need for the e-print version was felt amongst the students. It began with a round of critisism about the latest edition of Manthan by the senior members of the IISER community and an enthusistic rebuttal in the form of calls of expansion by the newest generation of IISERians. The end result was one nightout by one of the spectators and the first look of the e-Manthan was ready. Enjoy the articles and contribute heavily.</p>
    </div>

    <div class="one-half last">
        <div class="heading_bg"><h2>Limelight</h2></div>
        <p>A description, thumbnail image, and preview of the latest article can be displayed here. <br /> <br /> <a href="#">Read More >></a></p>
    </div>
    
    <div class="one-half last">
        <div class="heading_bg"><h2>Limelight</h2></div>
        <p>A description, thumbnail image, and preview of the latest article can be displayed here. <br /> <br /> <a href="#">Read More >></a></p>
    </div>
@endsection