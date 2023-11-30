import Price from "../entities/price";

export interface IApiServicesRepository {
    getPrices: () => Promise<Price[]>
}