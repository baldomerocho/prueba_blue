import {Route, Routes} from "react-router-dom";
import InVehicle from "../../containers/Forms/InVehicle";
import OutVehicle from "../../containers/Forms/OutVehicle";
import AddVehicle from "../../containers/Forms/AddVehicle";
import StartMonth from "../../containers/Forms/StartMonth";
import ResidentPayment from "../../containers/Forms/ResidentPayment";

function Body() {
    return (
        <div className="basis-2/3">

        <Routes>
            <Route path="/in-vehicle" element={<InVehicle/>}/>
            <Route path="/out-vehicle" element={<OutVehicle/>}/>
            <Route path="/add-vehicle" element={<AddVehicle/>}/>
            <Route path="/start-month" element={<StartMonth/>}/>
            <Route path="/resident-payment" element={<ResidentPayment/>}/>
        </Routes>
        </div>
    );
}

export default Body;