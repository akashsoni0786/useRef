import React from 'react'
import './ThePowerOfPre.css'
const ThePowerOfPre = () => {
  return (
    <div >
        <h2>The Power Of Premium</h2>
        <div style={{display:"flex"}}>
        <IconContent />
        <IconContent2 />
        <IconContent3 />
        <IconContent4 />
        </div>
    </div>
  )
}


export const IconContent = () => {
  return (
    <div style={{padding:"2%"}}><div>
        <img style={{width:"16vw"}} alt='' src='https://i.scdn.co/image/ab671c3d0000f43098292b95d24a697c20df5137'/></div>
        <div><h2 style={{fontSize:"2vw"}}>Ad-free music listening</h2></div>
        <div><p  style={{fontSize:"1.2vw"}}>Enjoy uninterrupted music.</p></div>
        </div>
  )
}
export const IconContent2 = () => {
    return (
      <div style={{padding:"2%"}}><div>
          <img style={{width:"16vw"}} alt='' src='https://i.scdn.co/image/ab671c3d0000f43009302fbaf6259b4c117c704f'/></div>
          <div><h2 style={{fontSize:"2vw"}}>Offline playback</h2></div>
          <div><p  style={{fontSize:"1.2vw"}}>Save your data by listening offline.</p></div>
          </div>
    )
  }

  export const IconContent3 = () => {
    return (
        <div style={{padding:"2%"}}><div>
            <img style={{width:"16vw"}} alt='' src='https://i.scdn.co/image/ab671c3d0000f4306998d3ffd58aad6da6afdf67'/></div>
            <div><h2 style={{fontSize:"2vw"}}>Play everywhere</h2></div>
            <div><p  style={{fontSize:"1.2vw"}}>Listen on your speakers, TV, and other favorite devices.</p></div>
            </div>
      )
  }
  export const IconContent4 = () => {
    return (
        <div style={{padding:"2%"}}><div>
            <img  style={{width:"16vw"}} alt='' src='https://i.scdn.co/image/ab671c3d0000f43098292b95d24a697c20df5137'/></div>
            <div><h2 style={{fontSize:"2vw"}}>Pay your way</h2></div>
            <div><p type="button" style={{fontSize:"1.2vw"}}>Prepay with Paytm, UPI, and more.</p></div>
            </div>
      )
  }
export default ThePowerOfPre