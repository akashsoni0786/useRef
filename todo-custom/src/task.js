import React from 'react'

const TaskBox = (props) => {
    // const dragging=(e)=>{
    //     console.log(props)
    //     props.drag(e);
    // }
  return (
    <div
          className="list-item"
          draggable="true"
          // onDragStart={(event) => {
          //   dragging(event)
          // }}
        >
          <label>{props.task_label}</label>
          <div className="list-edt-del">
            <button onClick={props.edit}>Edit</button>
            <button onClick={props.del}>Delete</button>
          </div>
        </div>
  )
}

export default TaskBox