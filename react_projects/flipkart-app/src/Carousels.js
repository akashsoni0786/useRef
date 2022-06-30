import React from 'react'

const Carousels = () => {
  return (
    <div><div id="carouselExampleControlsNoTouching" class="carousel slide " data-bs-touch="false" data-bs-interval="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img type="button"  src="https://rukminim1.flixcart.com/flap/1688/280/image/cae6a856c2144af8.jpg?q=50" class="d-block w-100" alt="..."/>
      </div>
      <div class="carousel-item">
        <img type="button" src="https://rukminim1.flixcart.com/flap/844/140/image/8b6f57450be3402c.jpg?q=50" class="d-block w-100" alt="..."/>
      </div>
      <div class="carousel-item">
        <img type="button" src="https://rukminim1.flixcart.com/flap/844/140/image/560b0116e1761adf.jpg?q=50" class="d-block w-100" alt="..."/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next"type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div></div>
  )
}

export default Carousels