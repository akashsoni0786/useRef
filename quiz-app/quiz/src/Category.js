import { Button } from '@mui/material'
import React from 'react'
import { useNavigate } from 'react-router-dom'
import { contxtname } from './Context'

const style= {
    margin:"0px 50px",
    width:"200px"
}
const Category = () => {
    const contxt = React.useContext(contxtname);
    const navigate = useNavigate();
  return (
    <div>
        <div className='category'>
            <h1>Choose category</h1>
        <img className='wallpaper' src='category.png' alt=''/>
        <div className='btnscate'>
        <Button variant="contained" sx={style} onClick={()=>{navigate("/quiz");contxt.setCategory("General Science")}}>
        General Science
      </Button>
      <Button variant="contained" sx={style} onClick={()=>{navigate("/quiz");contxt.setCategory("Maths")}}>
        Maths
      </Button>
        </div></div>
        
    </div>
  )
}

export default React.memo(Category)