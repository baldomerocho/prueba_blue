import Option from "./Option";

function Menu(){
    return(
        <div className="p-4 space-y-4 h-full flex flex-col justify-center">
            <Option title="Ingresar vehiculo" section="ha" />
            <Option title="Egresar vehiculo" section="ge" />
            <Option title="Dar de alta vehiculo" section="hsa" />
            <Option title="Comienza mes" section="hsa" />
            <Option title="Realizar pago" section="hsa" />
        </div>
    )
}

export default Menu;