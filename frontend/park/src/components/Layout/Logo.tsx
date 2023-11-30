function Logo(){
    return (<div className="flex flex-row items-center justify-center h-16 bg-slate-800">
        <div className="flex flex-row items-center justify-center w-10 h-10 rounded-full">
            <img src="https://res.cloudinary.com/valdomero/image/upload/v1701355467/muxbqgxoaqwa0jdjeaka.png" alt="avatar" className="w-8 h-8 rounded-full"/>
        </div>
        <div className="flex flex-col ml-2">
            <span className="text-sm font-medium text-white">Parqueo</span>
            <span className="text-xs font-medium text-gray-400"> parqueo.test</span>
        </div>
    </div>)
}

export default Logo;