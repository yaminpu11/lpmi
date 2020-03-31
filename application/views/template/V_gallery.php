<style type="text/css">
  $lg: 580px;

html, 
body {
  margin: 0;
  padding: 10px;
  background: darken(whitesmoke, 10%);
}
#instafeed {
  max-width:1080px;
  width: 100%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  
  a {
    display: flex;
    align-items: center;
    position: relative;
    width: 50%;
    background: white;
    
    @media only screen and (min-width: $lg) {
      width: 25%;
    }
    
    img {
      display: block;
      width: 100%;
    }
  }
}
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script type="text/javascript">
  // Use the CDN or host the script yourself
// https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js
// https://matthewelsom.com/assets/js/libs/instafeed.min.js

var userFeed = new Instafeed({
  get: 'user',
  userId: '8987997106',
  clientId: '924f677fa3854436947ab4372ffa688d',
  accessToken: '8987997106.924f677.8555ecbd52584f41b9b22ec1a16dafb9',
  resolution: 'standard_resolution',
  template: '<div class="col-md-4"><div class="card mb-4"><a href="{{link}}" target="_blank" id="{{id}}"><img class="w-100" src="{{image}}" /></a></div></div>',
  sortBy: 'most-recent',
  limit: 4,
  links: false
});
userFeed.run();

</script>
<section class="py-5">

  <div class="container py-5">       
    
    <div class="col pb-4 py-5">
      <h1 class="font-weight-bold dark-grey-text my-2 text-center h1-responsive"><lang>Gallery</lang></h1>
      <hr class="w-header bg-blue-hr">      
      <p class="text-center text-grey mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>Gallery</lang></a></small></p>
    </div>

    <div class="row" style="padding: 15px 0;">
      
        <div id="instafeed">
        </div>
      
    </div>


  </div>
</section>
