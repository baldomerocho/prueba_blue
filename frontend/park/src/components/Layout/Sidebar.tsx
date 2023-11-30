import Logo from "./Logo";
import Body from "./Body";
import Menu from "../Menu/Menu";

function Sidebar(){
    return (
        <div className="basis-1/3 max-h-max">
            <Menu/>
        </div>
    )
}

export default Sidebar;