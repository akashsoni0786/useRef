import { Button } from '@mui/material'
import React from 'react'
import { useNavigate } from 'react-router-dom'

const Home = () => {
    const navigate = useNavigate();
  return (
    <div>
        <div className='homepage'>
            <h1>Quiz App</h1>
        <img className='wallpaper' src='qz1.png' alt=''/>
        <Button variant="contained" onClick={()=>{navigate("/category")}}>
        Play
      </Button>
        </div>
        
    </div>
  )
}

export default React.memo(Home)