import Option from "./Option";

function Menu(){
    return(

        <div className="p-4 space-y-4 h-full flex flex-col justify-center">
            <Option title="Ingresar vehiculo" section="in-vehicle" />
            <Option title="Egresar vehiculo" section="out-vehicle" />
            <Option title="Dar de alta vehiculo" section="add-vehicle" />
            <Option title="Comenzar mes" section="start-month" />
            <Option title="Pago residentes" section="resident-payment" />
        </div>
    )
}

export default Menu;