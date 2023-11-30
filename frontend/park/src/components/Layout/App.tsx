import exp from "constants";
import Logo from "./Logo";
import Sidebar from "./Sidebar";
import Body from "./Body";

function App() {
    return (
        <div>
            <Logo/>
            <div className="flex flex-row h-full">
                <Sidebar/>
                <Body/>
            </div>
        </div>
    );
}

export default App;