import React, { useEffect, useState } from "react";
import "./products.css";
import ProductTable from "../components/ProductTable";
import { fetchProducts } from "../api";

const Products = () => {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    fetchProducts().then(setProducts);
  }, []);

  return (
    <div className="products-page">
      <h2 className="products-title">Available Medicines</h2>
      <ProductTable products={products} />
    </div>
  );
};

export default Products;
