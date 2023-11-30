import Price from "../entities/price";
import { IApiServicesRepository } from "../interfaces/ApiServices";


const vehicles = process.env.REACT_APP_SERVICE_VEHICLES;
export class ApiServicesImpl implements IApiServicesRepository{
  getPrices(): Promise<Price[]> {
    return new Promise((resolve, reject) => {
      fetch(vehicles+"/api/v1/prices")
        .then((response) => response.json())
        .then((data) => {
          resolve(data["data"] as Price[]);
        })
        .catch((error) => reject(error));

    })}}

export default ApiServicesImpl;