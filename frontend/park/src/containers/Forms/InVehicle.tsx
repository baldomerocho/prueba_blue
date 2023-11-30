function InVehicle(){
    return (
        <div className="max-w-4xl mx-auto my-6 p-6 border-2 border-slate-300 rounded-xl">
            <h2 className="text-2xl my-6">Ingresar Vehiculo</h2>
            <form className="">
                <div className="mb-5">
                    <label htmlFor="plate" className="block mb-2 text-sm font-medium text-gray-900 ">PLACA</label>
                    <input type="text" id="plate"
                           className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                           placeholder="P123ABC" required />
                </div>
                <button type="submit"
                        className="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                    Guardar
                </button>
            </form>

        </div>
    );
}

export default InVehicle;