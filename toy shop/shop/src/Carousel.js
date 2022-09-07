import React from 'react';
import Carousel from 'react-material-ui-carousel'
import { Paper, Button, Box, Typography } from '@mui/material'

export default function MyCarousel()
{
    var items = [
        {
            name: "Random Name #3",
            pics : "https://image2.jdomni.in/banner/13092021/BD/8D/D6/84A53E0C9BB87E4F9D5C8FCD05_1631508996975.png?output-format=webp"
        },
    
        {
            name: "Random Name #2",
            pics : "https://image3.jdomni.in/banner/13092021/8D/0D/0E/AC8493410DE9925D21CCD3A12A_1631509270981.png?output-format=webp"
        }
    ]

    return (
        <Carousel>
            {
                items.map( (item, i) => <Item key={i} item={item} /> )
            }
        </Carousel>
    )
}

function Item(props)
{
    return (
        <Paper sx={{height:"inherit",marginTop:"115px",}}>
            <img style={{width:"100%"}} alt='' src={props.item.pics}/>
        </Paper>
      
    )
}