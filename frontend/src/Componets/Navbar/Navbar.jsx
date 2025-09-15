import React from "react";
import { NavLink } from "react-router-dom";
import "./Navbar.css";

const Navbar = ({ onLogout }) => {
  return (
    <nav className="navbar">
      <h1 className="navbar-logo">Pharmacy Inventory</h1>
      <div className="navbar-links">
        <NavLink to="/" className="nav-link">
          Dashboard
        </NavLink>
        <NavLink to="/products" className="nav-link">
          Products
        </NavLink>
        <NavLink to="/add-product" className="nav-link">
          Add Product
        </NavLink>
        <NavLink to="/reports" className="nav-link">
          Reports
        </NavLink>
        <button onClick={onLogout} className="logout-btn">
          Logout
        </button>
      </div>
    </nav>
  );
};

export default Navbar;
