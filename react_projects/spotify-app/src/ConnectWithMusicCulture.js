import React from 'react'

const ConnectWithMusicCulture = () => {
  return (
    <div style={{backgroundColor:"black"}}>
        <br />
        <br />
    <h2 style={{color:"white"}}>Connect with music culture</h2>
    <div style={{display:"flex",backgroundColor:"black"}}>
    <IconContentMusic />
    <IconContentMusic2 />
    <IconContentMusic3 />
    <IconContentMusic4 />
    </div>
</div>
  )
}
export const IconContentMusic = () => {
    return (
      <div style={{padding:"2%"}}><div>
          <img style={{width:"16vw"}} alt='' src='https://i.scdn.co/image/ab671c3d0000f4309894eb4527215b7fde79e673'/></div>
          <div><h2 style={{fontSize:"2vw",color:"white"}}>Bollywood Butter</h2></div>
          <div><p  style={{fontSize:"1.2vw",color:"white"}}>The finest quality Bollywood music handpicked for you.</p></div>
          </div>
    )
  }

  export const IconContentMusic2 = () => {
    return (
      <div style={{padding:"2%"}}><div>
          <img style={{width:"16vw"}} alt='' src='https://i.scdn.co/image/ab671c3d0000f4308180688c87bd403b7a6da8c7'/></div>
          <div><h2 style={{fontSize:"2vw",color:"white"}}>Punjabi 101</h2></div>
          <div><p  style={{fontSize:"1.2vw",color:"white"}}>The ultimate Punjabi hits.</p></div>
          </div>
    )
  }

  export const IconContentMusic3 = () => {
    return (
      <div style={{padding:"2%"}}><div>
          <img style={{width:"16vw"}} alt='' src='https://i.scdn.co/image/ab671c3d0000f430ed50366d5d8ba3e7d12fca43'/></div>
          <div><h2 style={{fontSize:"2vw",color:"white"}}>Tollywood Pearls</h2></div>
          <div><p  style={{fontSize:"1.2vw",color:"white"}}>The finest music from Telugu films.</p></div>
          </div>
    )
  }
  export const IconContentMusic4 = () => {
    return (
      <div style={{padding:"2%"}}><div>
          <img style={{width:"16vw"}} alt='' src='https://i.scdn.co/image/ab671c3d0000f430330523a1b60c1d5e0b31935f'/></div>
          <div><h2 style={{fontSize:"2vw",color:"white"}}>Hot Hits India</h2></div>
          <div><p  style={{fontSize:"1.2vw",color:"white"}}>50 hottest hits from across the globe</p></div>
          </div>
    )
  }
export default ConnectWithMusicCulture