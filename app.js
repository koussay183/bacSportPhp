const addVerif = () => {
  // get data from form
  const cin = document.getElementById("cin").value;
  const name = document.getElementById("name").value;
  const note = document.getElementById("note").value;

  // check on cin (8 digits only)
  if (isNaN(cin) || cin.length !== 8) {
    alert("cin !");
    return false;
  }
  if (name.length > 20) {
    alert("name !");
    return false;
  }
  if (parseFloat(note) > 20 || parseFloat(note) < 0) {
    alert("note !");
    return false;
  }

  return true;
};
