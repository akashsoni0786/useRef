import React from 'react'
import './App.css';
const PickYourPremium = () => {
  return (
    <div style={{justifyContent:"center"}}>
    <div style={{paddingLeft:"2%",paddingRight:"2%"}}>
        <h1>Pick Your Premium</h1>
        <p>Listen without limits on your phone, speaker, and other devices.</p>
      <PaymentGateway />
      <div style={{flexWrap:"wrap",display:"flex"}}>
      <PaymentCards />
      <PaymentCards2 /><PaymentCards2 /><PaymentCards2 />
      </div>
    </div>
    <SpecialDiscount />
    </div>
  )
}

export const PaymentGateway = () => {
  return (
    <div >
      <img style={{width:"3vw"}} alt='' src='https://content-tooling.spotifycdn.com/images/b33cabea-d074-4f4f-8714-da6bdb2f067f_upi.svg'/>

<img style={{width:"3vw"}} alt='' src='https://content-tooling.spotifycdn.com/images/ea750340-f556-4682-b84c-326269cdd4bc_paytm.svg'/>

<img style={{width:"3vw"}} alt='' src='https://content-tooling.spotifycdn.com/images/e549bf16-2051-43ac-b4d6-c5b8d7bf100d_visa.svg' />

<img style={{width:"3vw"}} alt='' src='https://content-tooling.spotifycdn.com/images/6d693019-628b-45b8-96ca-e3c294aed6aa_mastercard.svg'/>
<img style={{width:"3vw"}} alt='' src='https://content-tooling.spotifycdn.com/images/468706f2-62af-48e4-80cb-9616b011f6c6_amex.svg'/>

<img style={{width:"3vw"}} alt='' src='https://content-tooling.spotifycdn.com/images/13ab56f9-bcc3-414e-b8ff-6cf692a5ae0c_diners.svg'/>

    </div>
  )
}

export const PaymentCards = () => {
  return (
    <div><div className='mainCard'>
      <div type="button" class="buton1">One-time plans available</div>
      <h2>Mini</h2>
      <p>From ₹7/day</p>
      <p>1 account</p>
      <hr style={{height:"2px"}}/>
      <div><img style={{width:"15px"}} alt="" src='https://cdn-icons-png.flaticon.com/512/446/446191.png'/><span>Ad-free music listening on mobile</span></div><br />
      <div><img style={{width:"15px"}} alt="" src='https://cdn-icons-png.flaticon.com/512/446/446191.png'/><span>Group Session</span></div> <br />
      <div><img style={{width:"15px"}} alt="" src='https://cdn-icons-png.flaticon.com/512/446/446191.png'/><span>Download 30 songs on 1 mobile device</span></div>
      <br /><br /><br /><br /><br />
      <div className='buton2'>View Plans</div>
      <br /><br />
      <a href='#' className='termsBtn'>Terms and conditions apply.</a>
      </div></div>
  )
}

export const PaymentCards2 = () => {
  return (
    <div><div className='mainCard'>
      <div className='darkbtn'>1 month free</div>
      <div type="button" class="buton1">One-time plans available</div>
      <h2>Individual</h2>
      <p>₹119/month after offer period</p>
      <p>1 account</p>
      <hr style={{height:"2px"}}/>
      <div><img style={{width:"15px"}} alt="" src='https://cdn-icons-png.flaticon.com/512/446/446191.png'/><span>Ad-free music listening on mobile</span></div><br />
      <div><img style={{width:"15px"}} alt="" src='https://cdn-icons-png.flaticon.com/512/446/446191.png'/><span>Group Session</span></div> 
      <div><img style={{width:"15px"}} alt="" src='https://cdn-icons-png.flaticon.com/512/446/446191.png'/><span>Download 10k songs/device on 5 devices</span></div>
    <br /><br />
      <div className='buton2'>View Plans</div>
      <br />
      <a href='#' className='termsBtn'>Terms and conditions apply.</a>
      <span className='termsBtn'>1 month free not available for users who have already tried Premium.</span>
      </div></div>
  )
}

export const SpecialDiscount = () => {
  return (
   <div> <div className='specialDiscountcard'>
    <span ><span>Special discount for eligible students in university
</span> <span className='hollowbtnblack'>Learn More</span></span>
    </div></div>
  )
}

export default PickYourPremium