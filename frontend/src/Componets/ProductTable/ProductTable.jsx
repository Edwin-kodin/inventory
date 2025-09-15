import React from "react";

function ProductTable({ products }) {
  return (
    <div className="inventory-container">
      <h2 className="inventory-title">Pharmacy Inventory</h2>
      <table className="inventory-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Medicine Name</th>
            <th>Category</th>
            <th>Price (GHS)</th>
            <th>Quantity</th>
            <th>Expiry Date</th>
          </tr>
        </thead>
        <tbody>
          {products.length > 0 ? (
            products.map((p) => (
              <tr key={p.id}>
                <td>{p.id}</td>
                <td>{p.name}</td>
                <td>{p.category?.name || "Uncategorized"}</td>
                <td>₵{p.price}</td>
                <td className={p.quantity < 10 ? "low-stock" : "in-stock"}>
                  {p.quantity}
                </td>
                <td>{p.expiry_date ? p.expiry_date : "N/A"}</td>
              </tr>
            ))
          ) : (
            <tr>
              <td colSpan="6" className="no-data">
                No medicines found.
              </td>
            </tr>
          )}
        </tbody>
      </table>
    </div>
  );
}

export default ProductTable;
