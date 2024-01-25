import React from "react";

function ProductCard() {
  return (
    <div className="product_card">
      <img
        className="product_card-image"
        src="/assets/product/lipstic.jpg"
        alt="product-image"
      />
      <div className="product_card-details">
        <div className="product_card-details-data">
          <p className="product_card-details-data-name">Product Name</p>
        </div>
        <div className="product_card-details-data">
          <p className="product_card-details-data-price">$20</p>
        </div>
        <button className="product_card-details-btn">Add to Cart</button>
      </div>
    </div>
  );
}
export default ProductCard;
