import * as React from "react";
import { styled, alpha } from "@mui/material/styles";
import AppBar from "@mui/material/AppBar";
import Box from "@mui/material/Box";
import Toolbar from "@mui/material/Toolbar";
import IconButton from "@mui/material/IconButton";
import Typography from "@mui/material/Typography";
import InputBase from "@mui/material/InputBase";
import Badge from "@mui/material/Badge";
import MenuItem from "@mui/material/MenuItem";
import Menu from "@mui/material/Menu";
import SearchIcon from "@mui/icons-material/Search";
import AccountCircle from "@mui/icons-material/AccountCircle";
import MoreIcon from "@mui/icons-material/MoreVert";
import ShoppingCartIcon from "@mui/icons-material/ShoppingCart";
import HomeIcon from "@mui/icons-material/Home";
import { Link, useNavigate } from "react-router-dom";
import { contextname } from "./Context";
import AttachFileIcon from "@mui/icons-material/AttachFile";
import { Tooltip } from "@mui/material";
import VideoCameraBackIcon from "@mui/icons-material/VideoCameraBack";
import DataSaverOnIcon from "@mui/icons-material/DataSaverOn";
import ExtensionIcon from "@mui/icons-material/Extension";
import OtherHousesIcon from "@mui/icons-material/OtherHouses";
import LogoutIcon from '@mui/icons-material/Logout';
const Search = styled("div")(({ theme }) => ({
  position: "relative",
  borderRadius: theme.shape.borderRadius,
  backgroundColor: alpha(theme.palette.common.white, 0.15),
  "&:hover": {
    backgroundColor: alpha(theme.palette.common.white, 0.25),
  },
  marginRight: theme.spacing(2),
  marginLeft: 0,
  width: "100%",
  [theme.breakpoints.up("sm")]: {
    marginLeft: theme.spacing(3),
    width: "auto",
  },
}));

const SearchIconWrapper = styled("div")(({ theme }) => ({
  padding: theme.spacing(0, 2),
  height: "100%",
  position: "absolute",
  pointerEvents: "none",
  display: "flex",
  alignItems: "center",
  justifyContent: "center",
}));

const StyledInputBase = styled(InputBase)(({ theme }) => ({
  color: "inherit",
  "& .MuiInputBase-input": {
    padding: theme.spacing(1, 1, 1, 0),
    // vertical padding + font size from searchIcon
    paddingLeft: `calc(1em + ${theme.spacing(4)})`,
    transition: theme.transitions.create("width"),
    width: "100%",
    [theme.breakpoints.up("md")]: {
      width: "20ch",
    },
  },
}));

export default function PrimarySearchAppBar(props) {
  const contxt = React.useContext(contextname);
  const navigate = useNavigate();
  const logoutbtn = ()=>{
    contxt.setLogin('');
    contxt.setLoginid('');
  }
  var search_val = [];
  const contxtobj = React.useContext(contextname);

  const [anchorEl, setAnchorEl] = React.useState(null);
  const [mobileMoreAnchorEl, setMobileMoreAnchorEl] = React.useState(null);

  const isMenuOpen = Boolean(anchorEl);
  const isMobileMenuOpen = Boolean(mobileMoreAnchorEl);

  const handleProfileMenuOpen = (event) => {
    setAnchorEl(event.currentTarget);
  };

  const handleMobileMenuClose = () => {
    setMobileMoreAnchorEl(null);
  };

  const handleMenuClose = () => {
    setAnchorEl(null);
    handleMobileMenuClose();
  };

  const handleMobileMenuOpen = (event) => {
    setMobileMoreAnchorEl(event.currentTarget);
  };

  const menuId = "primary-search-account-menu";
  const renderMenu = (
    <Menu
      anchorEl={anchorEl}
      anchorOrigin={{
        vertical: "top",
        horizontal: "right",
      }}
      id={menuId}
      keepMounted
      transformOrigin={{
        vertical: "top",
        horizontal: "right",
      }}
      open={isMenuOpen}
      onClose={handleMenuClose}
    >
      <MenuItem onClick={handleMenuClose}>Profile</MenuItem>
      <MenuItem onClick={handleMenuClose}>My account</MenuItem>
    </Menu>
  );

  const mobileMenuId = "primary-search-account-menu-mobile";
  const renderMobileMenu = (
    <Menu
      anchorEl={mobileMoreAnchorEl}
      anchorOrigin={{
        vertical: "top",
        horizontal: "right",
      }}
      id={mobileMenuId}
      keepMounted
      transformOrigin={{
        vertical: "top",
        horizontal: "right",
      }}
      open={isMobileMenuOpen}
      onClose={handleMobileMenuClose}
    >
     
      <MenuItem>
        <IconButton size="large" aria-label="cart" color="inherit">
          <Badge badgeContent={props.cartcount} color="error">
            <Link className="link" to="/cart">
            <img style={{width:"20px"}} alt="" src="https://cdn-icons-png.flaticon.com/512/2571/2571000.png"/>
            </Link>
          </Badge>
        </IconButton>
        <Link style={{textDecoration:"none"}} className="link" to="/mypost">
          <p>My Posts</p>
        </Link>
      </MenuItem>
      <MenuItem>
        <IconButton size="large" aria-label="cart" color="inherit">
          <Badge badgeContent={props.cartcount} color="error">
            <Link className="link" to="/cart">
            <img style={{width:"20px"}} alt="" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png"/>
            </Link>
          </Badge>
        </IconButton>
        <Link style={{textDecoration:"none"}}  className="link" to="/addpost">
          <p>Add posts</p>
        </Link>
      </MenuItem>
    </Menu>
  );
  //   const search_products = (e) => {
  //     navigate("/searched");
  //     var searchtext = e.target.value;
  //     products.map((i) => {
  //       if (i.name.includes(searchtext)) {
  //         search_val = [...search_val, i];
  //         console.log(search_val)
  //         contxtobj.setSearch(search_val);
  //       }
  //     });
  //   };
  return (
    <Box sx={{ flexGrow: 1 }}>
      <AppBar
        position="fixed"
        sx={{
          position: "fixed",
          backgroundColor: "white",
          overflow: "hidden",
          top: "0",
          marginBottom: "70px",
        }}
      >
        <Toolbar>
          <Link className="link" to="/home">
            <img style={{ width: "60px" }} alt="" src="https://cdn-icons-png.flaticon.com/64/3959/3959542.png" />
          </Link>
          <p
            style={{
              color: "#0A789B",
            
              fontSize: "30px",
            }}
          >
            BLOG
          </p>
          {/* <Search>
            <SearchIconWrapper>
              <SearchIcon sx={{ color: "black", cursor: "pointer" }} />
            </SearchIconWrapper>
            <StyledInputBase
              sx={{ color: "black" }}
              placeholder="Search…"
              inputProps={{ "aria-label": "search" }}
            //   onKeyUp={search_products}
            />
          </Search> */}
          <Box sx={{ flexGrow: 1 }} />
          <Box sx={{ display: { xs: "none", md: "flex" } }}>
          

            <Tooltip title="Attact your post">
            <IconButton
              size="large"
              aria-label="new notifications"
              color="inherit"
            >
              
                <Link className="link" to="/addpost">
                  <img style={{width:"40px"}} alt="" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png"/>
                
             
                </Link>
            
            </IconButton></Tooltip>


            <Tooltip title="See your post">
            <IconButton
              size="large"
              aria-label="new notifications"
              color="inherit"
            >
              
                <Link className="link" to="/mypost">
                  <img style={{width:"40px"}} alt="" src="https://cdn-icons-png.flaticon.com/512/2571/2571000.png"/>
                
             
                </Link>
            
            </IconButton></Tooltip>
           
            <Tooltip title="Logout ">
            <IconButton
              size="large"
              aria-label="new notifications"
              color="inherit"
            >
              
                <Link className="link" to="/" onClick={logoutbtn}>
                  <img style={{width:"40px"}} alt="" src="https://cdn-icons-png.flaticon.com/512/1828/1828490.png"/>
                
             
                </Link>
            
            </IconButton></Tooltip>
            {/* <IconButton
              size="large"
              edge="end"
              aria-label="account of current user"
              aria-controls={menuId}
              aria-haspopup="true"
              onClick={handleProfileMenuOpen}
              color="inherit"
            >
              <AccountCircle sx={{ color: "#0A789B" }} />
            </IconButton> */}
          </Box>
          <Box sx={{ display: { xs: "flex", md: "none" } }}>
            <IconButton
              size="large"
              aria-label="show more"
              aria-controls={mobileMenuId}
              aria-haspopup="true"
              onClick={handleMobileMenuOpen}
              color="inherit"
              sx={{ backgroundColor: "#0A789B" }}
            >
              <MoreIcon />
            </IconButton>
          </Box>
        </Toolbar>
      </AppBar>
      {renderMobileMenu}
      {renderMenu}
    </Box>
  );
}
