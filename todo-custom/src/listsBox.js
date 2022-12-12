import React from "react";

const ListsBox = (props) => {
  return (
    <ul
      className={props.listName}
      onDrop={(event) => {
        props.drop(event);
      }}
      onDragOver={(event) => {
        props.allowDrop(event);
      }}
    >
      <li className="list-header">
        <h2>{props.heading_name}</h2>
        <button onClick={props.showInpField}>+</button>
      </li>
      <li className={`list-${props.inpbox}-input-box`}>
        <form
          onSubmit={props.addTask}
          className="list-input"
        >
          <input
          id={props.inpID}
            value={props.Inp}
            onChange={(e) => {
              props.setInp(e.target.value);
              console.log(props.Inp)
            }}
          />

          <div className="list-submit">
            <button
              onClick={props.addTask}
            >
              Submit
            </button>
          </div>
        </form>
      </li>
      <li className={`list-${props.inpbox}-update-box`}>
        <form
          onSubmit={(e)=>props.addUpdate(e,props.inpbox)}
          className="list-input"
        >
          <input
          id={props.inputId}
            value={props.InpUpdate}
            onChange={(e) => {
              props.setInpUpdate(e.target.value);
            }}
          />

          <div className="list-submit">
            <button
              onClick={(e)=>props.addUpdate(e,props.inpbox)}
            >
              Update
            </button>
          </div>
        </form>
      </li>
      {props.listArr.map((item, index) => {
        return (
          <li
            key={index}
            className="list-item"
            draggable="true"
            onDragStart={(e) =>
              props.drag(e, props.listArr[index], props.listName)
            }
          >
            <label>{item.task}</label>
            <div className="list-edt-del">
              <button onClick={()=>props.edit(item,props.inpbox)}>Edit</button>
              <button onClick={()=>props.del(item.id,props.inpbox)}>Delete</button>
            </div>
          </li>
        );
      })}
    </ul>
  );
};

export default ListsBox;
