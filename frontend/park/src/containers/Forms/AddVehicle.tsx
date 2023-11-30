import {ApiServicesImpl} from "../../services/ApiServicesImpl";
import {useEffect, useState} from "react";
import Price from "../../entities/price";
// get prices
function OutVehicle(){
    const [prices, setPrices] = useState<Price[]>([]);
    useEffect(() => {
        const fetchData = async () => {
            try {
                const api = new ApiServicesImpl();
                const res = await api.getPrices();
                setPrices(res);
            } catch (error) {
                console.error('Error fetching prices:', error);
                // Maneja el error según tus necesidades
            }
        };
    fetchData();
        return () => {

        };
    }, []);

    return (
        <div className="max-w-4xl mx-auto my-6 p-6 border-2 border-slate-300 rounded-xl">
            <h2 className="text-2xl my-6">Dar de alta Vehiculo</h2>
            <form className="">
                <div className="mb-5">
                    <label htmlFor="plate" className="block mb-2 text-sm font-medium text-gray-900 ">PLACA</label>
                    <input type="text" id="plate"
                           className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                           placeholder="P123ABC" required />
                </div>
                <select name="type" id="type" className="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option>Seleccionar tipo</option>
                    {prices.map((price) => {
                        return <option value={price.id} key={price.id}>{price.name}</option>
                    })}
                </select>
                <button type="submit"
                        className="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Comprobar
                </button>
            </form>

        </div>
    );
}

export default OutVehicle;