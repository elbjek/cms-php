
<nav class=" container-fluid navigation reset fixed-top  " >
    <div class="row reset">   
        <div class="navbrand col-2 reset d-flex align-items-center justify-content-between">
            <a href="#" class="navbar-brand">LOGO</a>
            <a href="#" id="something"><i class="fas fa-ellipsis-v"></i></a>
        </div>

        <div class="col user-bar justify-content-end d-flex align-items-center reset">
            <ul class="reset">
                <li><a href="#">Link</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </div>
    </div> 
</nav>

<script>

var s = document.getElementById("something");

s.addEventListener('click',(event)=>{
event.preventDefault();
alert("lol")
})
</script>