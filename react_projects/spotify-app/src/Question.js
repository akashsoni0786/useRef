import React from 'react'
import './App.css';
const Question = () => {
  return (
    <div>
        <div>
            <h1>Questions</h1>
            <p>We've got answers</p>
            <Ques1 />
        </div>
    </div>
  )
}

export const Ques1 = () => {
  return (
    <div style={{width: '400px'}}>
        <div className='questions'>
        <h5>What is Spotify and Spotify Premium?</h5>
        <img style={{width:"10px",height:"10px"}} alt='' src='https://cdn-icons-png.flaticon.com/512/60/60995.png'/>
        </div>
       <hr />
    </div>
  )
}


export default Question