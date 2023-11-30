
import {useNavigate} from "react-router-dom";

function Option({title, section}: {title: string, section: string}){
    const navigate = useNavigate();
    function handleClick(){
        navigate(section);
    }
    return(
            <div onClick={handleClick} className="p-4 bg-slate-300 rounded-2xl ease-in-out duration-300 cursor-pointer hover:ml-4 hover:bg-slate-200">
                <span className="uppercase font-bold text-xl">{title}</span>
            </div>
    )}

export default Option;