<template>

<!--top header starts here-->
<div class="top_head">
	<a href="#">JOIN NOW</a>
</div>
<div class="menu_bar">
	<div class="container">
			<nav class="navbar navbar-expand-md navbar-dark">
		  <a class="navbar-brand" href="#"><img src="assets/images/logo.png"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#">ABOUT</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">EVENTS</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">POLICY WORK</a>
		      </li>  
		       <li class="nav-item">
		        <a class="nav-link" href="#">RESOURCES</a>
		      </li> 
		       <li class="nav-item">
		        <a class="nav-link" href="#">MEMBERSHIP</a>
		      </li>  
		       <li class="nav-item">
		        <a class="nav-link" href="#">MEDIA</a>
		      </li>  
		       <li class="nav-item">
		        <a class="nav-link" href="#">BLOG</a>
		      </li> 
		       <li class="nav-item">
		        <a class="nav-link" href="#">CONTACT</a>
		      </li> 
		    </ul>
		  </div>  
		</nav>
</div>
</div>
</template>
<script>
 
   
     export default {
        
   
         data() {
             return {}
         },
   
         methods: {
           logout() {
                 this.$inertia.post(route('logout'));
             },
         },
   
             
     }
</script>