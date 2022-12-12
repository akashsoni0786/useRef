import React, { useState } from "react";
import ListsBox from "./listsBox";
import { v4 as uuid } from "uuid";
import "./todo.css";
const Todo = () => {
  const [inpReviewValue, setInpReviewValue] = useState("");
  const [inpPendingValue, setInpPendingValue] = useState("");
  const [inpCompleteValue, setInpCompleteValue] = useState("");
  const [editableContent, setEditableContent] = useState({});
  const [completed, setCompleted] = useState([]);
  const [pending, setPending] = useState([]);
  const [review, setReview] = useState([]);
  const [source, setSource] = useState({});
  const [dataMovement, setDataMovement] = useState({});
  function drag(ev, taskName, section) {
    setSource(section);
    setDataMovement(taskName);
    ev.dataTransfer.setData("task_content", JSON.stringify(taskName));
  }
  const drop = (ev) => {
    ev.preventDefault();
    let updatedPending, updatedReview, updatedComplete;
    var data = JSON.parse(ev.dataTransfer.getData("task_content"));
    if (ev.target.className === "review") {
      if (source === "pending") {
        updatedPending = pending.filter((item) => item.id !== dataMovement.id);
        updatedReview = [...review, dataMovement];
        setPending(updatedPending);
        setReview(updatedReview);
      }
      if (source === "complete") {
        updatedComplete = completed.filter(
          (item) => item.id !== dataMovement.id
        );
        updatedReview = [...review, dataMovement];
        setCompleted(updatedComplete);
        setReview(updatedReview);
      }
    }
    if (ev.target.className === "pending") {
      if (source === "review") {
        updatedReview = review.filter((item) => item.id !== dataMovement.id);
        updatedPending = [...pending, dataMovement];
        setPending(updatedPending);
        setReview(updatedReview);
      }
      if (source === "complete") {
        updatedComplete = completed.filter(
          (item) => item.id !== dataMovement.id
        );
        updatedPending = [...pending, dataMovement];
        setCompleted(updatedComplete);
        setPending(updatedPending);
      }
    }
    if (ev.target.className === "complete") {
      if (source === "review") {
        updatedReview = review.filter((item) => item.id !== dataMovement.id);
        updatedComplete = [...completed, dataMovement];
        setCompleted(updatedComplete);
        setReview(updatedReview);
      }
      if (source === "pending") {
        updatedPending = pending.filter((item) => item.id !== dataMovement.id);
        updatedComplete = [...completed, dataMovement];
        setCompleted(updatedComplete);
        setPending(updatedPending);
      }
    }
  };
  const allowDrop = (ev) => {
    ev.preventDefault();
  };
  const showInpReview = () => {
    document.querySelector(".list-review-input-box").style.display = "block";
    document.querySelector(".list-review-update-box").style.display = "none";
  };
  const showInpPending = () => {
    document.querySelector(".list-pending-input-box").style.display = "block";
    document.querySelector(".list-pending-update-box").style.display = "none";
  };
  const showInpComplete = () => {
    document.querySelector(".list-completed-input-box").style.display = "block";
    document.querySelector(".list-completed-update-box").style.display = "none";
  };
  const submitReviewTask = (e) => {
    e.preventDefault();
    if(inpReviewValue === ""){
      alert("Empty field")
    }
    else{
      let tsk = { id: uuid(), task: inpReviewValue };
    setReview([tsk, ...review]);
    document.querySelector(".list-review-input-box").style.display = "none";
    setInpReviewValue("");
    document.getElementById("review").value = ""
    }
  };
  const submitPendingTask = (e) => {
    e.preventDefault();
    if(inpPendingValue === ""){
      alert("Empty field")
    }
    else{
      let tsk = { id: uuid(), task: inpPendingValue };
    setPending([tsk, ...pending]);
    document.querySelector(".list-pending-input-box").style.display = "none";
    setInpPendingValue("");
    document.getElementById("pending").value = ""
    }
  };
  const submitCompletedTask = (e) => {
    e.preventDefault();
    if(inpCompleteValue === ""){
      alert("Empty field")
    }
    else{
      let tsk = { id: uuid(), task: inpCompleteValue };
    setCompleted([tsk, ...completed]);
    document.querySelector(".list-completed-input-box").style.display = "none";
    setInpCompleteValue("");
    document.getElementById("completed").value = "";
    }
  };
  const deleteTask = (e, lists) => {
    let updatedArr = [];
    if (lists === "review") {
      let reviewArr = [...review];
      updatedArr = reviewArr.filter((item) => item.id !== e);
      setReview(updatedArr);
    }
    if (lists === "pending") {
      let pendingArr = [...pending];
      updatedArr = pendingArr.filter((item) => item.id !== e);
      setPending(updatedArr);
    }
    if (lists === "completed") {
      let completedArr = [...completed];
      updatedArr = completedArr.filter((item) => item.id !== e);
      setCompleted(updatedArr);
    }
  };
  const editTask =(data,lists) =>{
    setEditableContent(data)
    if(lists === "review"){
      document.querySelector(".list-review-update-box").style.display = "block";
      document.querySelector(".list-review-input-box").style.display = "none";
      setInpReviewValue(data.task)
    }
    else if(lists === "pending"){
      document.querySelector(".list-pending-update-box").style.display = "block";
      document.querySelector(".list-pending-input-box").style.display = "none";
      setInpPendingValue(data.task)
    }
    else if(lists === "completed"){
      document.querySelector(".list-completed-update-box").style.display = "block";
      document.querySelector(".list-completed-input-box").style.display = "none";
      setInpCompleteValue(data.task)
    }
  }
  const updateTask =(e,lists) =>{
    e.preventDefault();
    if(lists === "review"){
      document.querySelector(".list-review-update-box").style.display = "none";
      let reviewArr = [...review].filter(item => item.id !== editableContent.id);
      reviewArr = [{id:editableContent.id,task:inpReviewValue},...reviewArr]
      setReview(reviewArr)
      setInpReviewValue("")
      document.getElementById("review").value = ""
    }
    else if(lists === "pending"){
      document.querySelector(".list-pending-update-box").style.display = "none";
      let pendingArr = [...pending].filter(item => item.id !== editableContent.id);
      pendingArr = [{id:editableContent.id,task:inpPendingValue},...pendingArr]
      setPending(pendingArr)
      setInpPendingValue("")
      document.getElementById("pending").value = ""
    }
    else if(lists === "completed"){
      document.querySelector(".list-completed-update-box").style.display = "none";
      let completeArr = [...completed].filter(item => item.id !== editableContent.id);
      completeArr = [{id:editableContent.id,task:inpCompleteValue},...completeArr]
      setCompleted(completeArr)
      setInpCompleteValue("")
      document.getElementById("completed").value = "";
    }
  }
  return (
    <div className="app">
      <header>
        <h1>Custom TODO</h1>
      </header>
      <div className="lists">
        <ListsBox
        InpUpdate={inpReviewValue}
        setInpUpdate={(e) => setInpReviewValue(e)}
          addTask={submitReviewTask}
          inp={inpReviewValue}
          setInp={(e) => setInpReviewValue(e)}
          showInpField={showInpReview}
          inpbox="review"
          inpID="review"
          heading_name="Review"
          listName="review"
          listArr={review}
          drop={drop}
          allowDrop={allowDrop}
          drag={drag}
          del={deleteTask}
          edit={editTask}
          addUpdate={updateTask}
        />

        <ListsBox
        InpUpdate={inpPendingValue}
        setInpUpdate={(e) => setInpPendingValue(e)}
          addTask={submitPendingTask}
          inp={inpPendingValue}
          setInp={(e) => setInpPendingValue(e)}
          showInpField={showInpPending}
          inpbox="pending"
          inpID="pending"
          heading_name="Pending"
          listName="pending"
          listArr={pending}
          drop={drop}
          allowDrop={allowDrop}
          drag={drag}
          del={deleteTask}
          edit={editTask}
          addUpdate={updateTask}
        />

        <ListsBox
        InpUpdate={inpCompleteValue}
        setInpUpdate={(e) => setInpCompleteValue(e)}
          addTask={submitCompletedTask}
          inp={inpCompleteValue}
          setInp={(e) => setInpCompleteValue(e)}
          showInpField={showInpComplete}
          inpbox="completed"
          inpID="completed"
          heading_name="Completed"
          listName="complete"
          listArr={completed}
          drop={drop}
          allowDrop={allowDrop}
          drag={drag}
          del={deleteTask}
          edit={editTask}
          addUpdate={updateTask}
        />
      </div>
    </div>
  );
};

export default Todo;
