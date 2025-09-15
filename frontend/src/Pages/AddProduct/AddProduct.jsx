import React, { useState } from "react";
import { addProduct } from "../api";
import "./AddProduct.css";

const AddProduct = () => {
  const [form, setForm] = useState({ name: "", quantity: "", price: "" });

  const handleChange = (e) =>
    setForm({ ...form, [e.target.name]: e.target.value });

  const handleSubmit = (e) => {
    e.preventDefault();
    addProduct(form).then(() => {
      alert("Product added successfully!");
      setForm({ name: "", quantity: "", price: "" });
    });
  };

  return (
    <div className="add-product-container">
      <h2 className="add-product-title">Add Product</h2>
      <form onSubmit={handleSubmit} className="add-product-form">
        <input
          type="text"
          name="name"
          placeholder="Product Name"
          value={form.name}
          onChange={handleChange}
          className="form-input"
          required
        />
        <input
          type="number"
          name="quantity"
          placeholder="Quantity"
          value={form.quantity}
          onChange={handleChange}
          className="form-input"
          required
        />
        <input
          type="number"
          name="price"
          placeholder="Price"
          value={form.price}
          onChange={handleChange}
          className="form-input"
          required
        />
        <button type="submit" className="submit-btn">
          Add Product
        </button>
      </form>
    </div>
  );
};

export default AddProduct;
