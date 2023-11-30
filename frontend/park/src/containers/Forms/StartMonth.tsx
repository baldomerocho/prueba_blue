function StartMonth(){
    return (
        <div className="max-w-4xl mx-auto my-6 p-6 border-2 border-slate-300 rounded-xl">
            <h2 className="text-2xl my-6">Comenzar mes</h2>
            <form className="">

                <button type="submit"
                        className="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                    Resetear
                </button>
            </form>

        </div>
    );
}

export default StartMonth;