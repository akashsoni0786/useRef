import React from 'react'
import './App.css';
import './Header.css';

export class Header extends React.Component {
    render(){
        return (
            <div className='navbg justify-content-between'>

                <div className='flipkartlogo'>
                <img type="button" className='flipkartlogoimg' src="flipkart.png" alt=''/>
                </div>

                <div className='searchBar'>
                <span><input style={{border:"none",marginLeft:"10px",width:"200px",fontSize:"1vw",outline:"none"}} placeholder='Search for products,brand and more'/></span>
                <span><img style={{width:"1.2vw"}} alt='' src='loupe.png' type="button" /></span>
                </div>

                <button className='loginBtn' type="button" >Login</button>
               
            <p type="button" className='sellermore'>Become a seller</p>
            <p type="button" className='sellermore'>More</p>

            <p><span ><i  class="bi bi-cart-fill text-primary text-light"></i></span><span type="button" className='sellermore'>Cart</span></p>

            </div>


          );
    }
  
}
