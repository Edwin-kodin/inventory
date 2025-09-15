import React from "react";
import LoginSignup from "./Pages/LoginSignup/LoginSignup";
import Dashboard from "./Pages/Dashboard/Dashboard";
import AddProduct from "./Pages/AddProduct/AddProduct";
import Reports from "./Pages/Reports/Report";
import ProductTable from "./Componets/ProductTable/ProducTable";
import Products from "./Pages/Products/Products";
import Navbar from "./Componets/Navbar/Navbar";
const App = () => {
  const [isAuthenticated, setIsAuthenticated] = useState(false);

  const handleLogin = () => setIsAuthenticated(true);
  const handleLogout = () => setIsAuthenticated(false);
  return (
    //* <div>
    //<LoginSignup />
    //</div>
    <Router>
      <div className="min-h-screen flex flex-col">
        {isAuthenticated && <Navbar onLogout={handleLogout} />}
        <div className="flex-1 p-6">
          <Routes>
            {!isAuthenticated ? (
              <>
                <Route
                  path="/login"
                  element={<LoginSignup onAuthSuccess={handleLogin} />}
                />
                <Route path="*" element={<Navigate to="/login" />} />
              </>
            ) : (
              <>
                <Route path="/" element={<Dashboard />} />
                <Route path="/products" element={<Products />} />
                <Route path="/add-product" element={<AddProduct />} />
                <Route path="/reports" element={<Reports />} />
                <Route path="*" element={<Navigate to="/" />} />
              </>
            )}
          </Routes>
        </div>
      </div>
    </Router>
  );
};

export default App;
