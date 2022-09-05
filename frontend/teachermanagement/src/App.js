import "./styles.css";

function App() {
  return (
    <div className="main-block">
      <h1>Teacher Detail</h1>
      <form>
      <hr />
          <input type="text" name="name" placeholder="Name"/>
          <input type="text" name="qualification" placeholder="Qualification"/>
          <input type="time" name="starttime" value="08:30"/>
          <input type="time" name="endtime" value="12:30"/>
          <button type="submit">Submit</button>
      </form>
    </div>
  )
}

export default App;
