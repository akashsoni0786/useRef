import React from "react";

export const contxtname = React.createContext();
const Context = (props) => {
  const [points, setPoints] = React.useState(0);
  const [category, setCategory] = React.useState(0);

  return (
    <contxtname.Provider
      value={{
        points: points,
        setPoints: setPoints,
        category:category, 
        setCategory:setCategory
      }}
    >
      {props.children}
    </contxtname.Provider>
  );
};

export default Context;
