import React from 'react'

const Footer = () => {
  return (
     <div className='d-flex flex-row justify-content-between'> 
    <div>
            <div  className='border shadow-lg p-3  bg-body d-flex flex-row  justify-content-between' style={{height:"50px",width:"100%",padding:"auto"}} >
                <div ><span style={{fontWeight:"bold",fontSize:"2.2vw"}}>Deals of the day </span><span><img alt='' src='https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/timer_a73398.svg' style={{width:"2vw"}}/></span><span className='blockquote ' style={{fontSize:"1.8vw"}} >11:11:33 Left</span></div>
                <div >
                    <button style={{marginTop:"-14px",height:"30px"}}  type="button" class="btn btn-primary pb-2">View All</button>
                </div>
            </div>
            <div style={{flexWrap:"wrap"}} className='d-flex flex-row '><Products /><Products /><Products /><Products /><Products /><Products /><Products /></div>
    </div>
         <div ><img type="button" width={200} alt='' src='https://rukminim1.flixcart.com/flap/464/708/image/a60eb148185597ad.jpg?q=70' /></div>
       </div>
  )
}



export const Products = () => {
  return (
    <div  style={{width: "10rem",textAlign:"center"}}>
  <img type="button" src="https://rukminim1.flixcart.com/image/150/150/krntoy80/cookware-set/g/n/x/kan028-kreme-original-imag5e7extvftecn.jpeg?q=70" style={{width:"100px"}}  alt="..."/>
  <div class="card-body">
    <p type="button" style={{fontSize:".8rem",fontWeight:"bold",marginBottom:"-4px"}} >Kitchen Dinning Set</p>
    <p type="button" style={{color:"green",fontSize:".8rem",marginBottom:"-1px"}}>Up to 70% Off</p>
    <p type="button" style={{color:"grey",fontSize:".8rem"}}>Best Discount</p>
  </div>
</div>
  )
}


export default Footer